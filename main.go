package main

import (
	"encoding/json"
	"fmt"
	"io/ioutil"
	"net/http"

	"github.com/gin-gonic/gin"
)

type PerformanceData struct {
	Unit       string  `json:"unit"`
	EmployeeID int     `json:"employee_id"`
	Productivity float64 `json:"productivity"`
	Trend       []float64 `json:"trend"`
}

func main() {
	r := gin.Default()

	// Endpoint untuk mendapatkan data kinerja
	r.GET("/api/performance", func(c *gin.Context) {
		// Panggil Python service untuk processing data
		resp, err := http.Get("http://localhost:5000/process")  // Asumsi Python berjalan di port 5000
		if err != nil {
			c.JSON(500, gin.H{"error": "Failed to fetch data from Python"})
			return
		}
		defer resp.Body.Close()

		body, _ := ioutil.ReadAll(resp.Body)
		var data []PerformanceData
		json.Unmarshal(body, &data)

		c.JSON(200, data)
	})

	r.Run(":8080")  // Jalankan di port 8080
}
