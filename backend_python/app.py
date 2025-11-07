from flask import Flask, jsonify
from data_processor import calculate_performance

app = Flask(__name__)

@app.route('/process', methods=['GET'])
def process_data():
    data = calculate_performance()
    return jsonify(data)

if __name__ == '__main__':
    app.run(port=5000)  # Jalankan di port 5000
