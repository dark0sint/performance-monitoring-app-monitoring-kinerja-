import sqlite3
import json

def calculate_performance():
    # Koneksi ke database dummy
    conn = sqlite3.connect('../database/performance.db')
    cursor = conn.cursor()
    
    # Query dummy: Hitung produktivitas rata-rata per unit
    cursor.execute("""
        SELECT unit, AVG(productivity) as avg_prod, GROUP_CONCAT(productivity) as trends
        FROM employees
        GROUP BY unit
    """)
    
    results = cursor.fetchall()
    data = []
    for row in results:
        unit, avg_prod, trends_str = row
        trends = [float(x) for x in trends_str.split(',')] if trends_str else []
        data.append({
            "unit": unit,
            "employee_id": 0,  # Dummy
            "productivity": avg_prod,
            "trend": trends
        })
    
    conn.close()
    return data
