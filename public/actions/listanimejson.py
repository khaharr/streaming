import json
import mysql.connector

# Charger les données JSON depuis le fichier
with open('response.json', 'r') as f:
    data = json.load(f)

# Connexion à la base de données
conn = mysql.connector.connect(
    host="172.20.0.2",
    user="root",
    password="pass",
    database="streaming"
)
cursor = conn.cursor()

# Insérer chaque entrée dans la base de données
for entry in data:
    id = entry['node']['id']
    nom = entry['node']['title']
    image = entry['node']['main_picture']['medium']
    
    # Insertion dans la base de données
    cursor.execute('''INSERT INTO anime (id, nom, image) VALUES (%s, %s, %s)''', (id, nom, image))

# Valider les modifications et fermer la connexion
conn.commit()
conn.close()
