import json
import mysql.connector

# Charger les données JSON depuis le fichier
with open('animelist.json', 'r') as f:
    data = json.load(f)

# Connexion à la base de données
conn = mysql.connector.connect(
    host="127.0.0.1",
    user="root",
    password="",
    database="streaming"
)
cursor = conn.cursor()

# Insérer chaque entrée dans la base de données
for entry in data['data']:
    id = entry['node']['id']
    nom = entry['node']['title']
    
    # Vérifier si 'main_picture' existe
    if 'main_picture' in entry['node']:
        image = entry['node']['main_picture']['medium']
    else:
        # Si 'main_picture' est manquant, assigner une valeur par défaut ou gérer l'absence d'image selon votre cas d'utilisation
        image = 'AUCUNE_IMAGE'
    
    # Vérifier si l'id existe déjà dans la base de données
    cursor.execute('''SELECT id FROM anime WHERE id = %s''', (id,))
    existing_entry = cursor.fetchone()

    if existing_entry:
        print(f"L'entrée avec l'id {id} existe déjà dans la base de données. Ignorer l'insertion.")
    else:
        # Insertion dans la base de données
        cursor.execute('''INSERT INTO anime (id, nom, image) VALUES (%s, %s, %s)''', (id, nom, image))

# Valider les modifications et fermer la connexion
conn.commit()
conn.close()
