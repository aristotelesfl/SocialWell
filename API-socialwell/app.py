from flask import Flask, request, jsonify

app = Flask(__name__)

# Rota de exemplo
@app.route('/api/exemplo', methods=['GET'])
def exemplo():
    return jsonify({"message": "Esta é uma rota de exemplo da API do SocialWell!"})

if __name__ == '__main__':
    app.run(debug=True)
