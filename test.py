import requests

url = 'http://localhost/api/clubes'
response = requests.get(url)
if response.status_code == 200:
    print('Requisição bem-sucedida!')
    print(response.text)  
else:
    print(f'Erro {response.status_code}: {response.reason}')