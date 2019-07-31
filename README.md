# Interpretabble-api
Laravel based api for Interpretabble

## TODO
- Give permission to the update route to update entierly the item

## Requirements :
- Composer

## Setup :

After you've cloned this repo

Update all the missing php dependencies with
> composer update

Copy the env.example file and rename it to .env
And edit this file to fit your db settings

> DB_CONNECTION=mysql
> DB_HOST=127.0.0.1
> DB_PORT=3306
> DB_DATABASE=mydatabase
> DB_USERNAME=myusername
> DB_PASSWORD=mypassword

Migrate the db table structure with
> php artisan migrate

And seed the default cards/thematics/machines
> php artisan db:seed

For development purpose you can use
> php artisan serve 



To serve your api

For production purpose you should change your .htaccess (/public) 
and your vhost to serve your api (on apache or nginx) 

## DEFINITION

### Hierarchy
- Machines
- Thematics
  - Items



### Items
Represents every physical card used to switch states on table
#### Definition
- id
- name
- medias (array)
  - zone1
  - zone2
  - zone3
  - zone4
- thematic_id




### Thematics
Is a way to categorise the cards in different section
ex : Vegetables (card) is contained in ALIMENTATION (Thematic)
- id 
- name

### Machines
Used for monitoring and logging, usefull for sending machine IP's and to get the logs
- id
- name
- ip
- logs (array)




## API ROUTES


### ITEMS
**GET** api/items
Lists every item in db
**Returns :**
```json
[
    {
        "id": 1,
        "created_at": "2019-05-23 13:41:14",
        "updated_at": "2019-05-23 13:41:14",
        "name": "name",
        "medias": [
            "url_to_media"
        ],
        
        "card_id": 0,
        "card_picture": "url_to_media_",
        "thematic_id": 4,
        "thematic_name": "thematic_name"
    },
]
```

**GET** api/item/{id}
Lists a specific item based on his id
**Returns :**
```json
[
    {
        "id": 1,
        "created_at": "2019-05-23 13:41:14",
        "updated_at": "2019-05-23 13:41:14",
        "name": "name",
        "medias": [
            "url_to_media"
        ],
        "card_id": 0,
        "card_picture": "url_to_media",
        "thematic_id": 4,
        "thematic_name": "thematic_name"
    },
]
```


**POST** api/item
Creates a new item
**Parameters :**
- Header
  - Content-Type:application/x-www-form-urlencoded
- Body  form-data
  - name 
  - card_id
  - card_picture
  - zone1
  - zone2
  - zone3
  - zone4

**Returns :**
```json
{
    "card_picture": "url_to_media",
    "thematic_id": 0,
    "name": "name",
    "medias": [
        "url_to_media",
        "url_to_media",
        "url_to_media",
        "url_to_media"
    ],
    "card_id": "0",
    "updated_at": "2019-05-24 14:49:46",
    "created_at": "2019-05-24 14:49:46",
    "id": 0
}
```

**POST** api/item/{id}
Updates a new item
**Parameters :**
- Header
  - Content-Type:application/x-www-form-urlencoded
- Body  form-data
  - card_picture

**Returns :**
```json
{
    "card_picture": "url_to_media",
    "thematic_id": 0,
    "name": "name",
    "medias": [
        "url_to_media",
        "url_to_media",
        "url_to_media",
        "url_to_media"
    ],
    "card_id": "0",
    "updated_at": "2019-05-24 14:49:46",
    "created_at": "2019-05-24 14:49:46",
    "id": 0
}
```




**DELETE** api/item/{id}
Deletes an item based on id
**Returns :**
```json
    item_name has been deleted
```


### THEMATICS

**GET** api/thematics
Lists every thematic in db

**Returns :**
```json
[
    {
        "id": 0,
        "created_at": "2019-05-23 13:41:14",
        "updated_at": "2019-05-23 13:41:14",
        "name": "name",
        "medias": [
            "url_to_media"
        ],
        "card_id": 0,
        "card_picture": "url_to_media",
        "thematic_id": 0,
        "thematic_name": "thematic_name"
    },
]
```

### MACHINES

**GET** api/machines
Lists every machine in db
**Returns :**
```json
[
    {
        "id": 0,
        "created_at": "2019-05-23 13:41:14",
        "updated_at": "2019-05-23 13:41:25",
        "name": "name",
        "ip": "ip",
        "logs": [
            "url_to_log",
            "url_to_log",
            "url_to_log"
        ]
    },
]
```

**GET** api/machine/{id}
Lists a specific machine in db
```json
{
    "id": 1,
    "created_at": "2019-07-15 13:08:54",
    "updated_at": "2019-07-22 14:06:19",
    "name": "Machine name",
    "ip": "ip",
    "logs": [
        {
            "cards": [],
            "start": {
                "time": "15-07-2019 15-17-39"
            }
        }
    ]
}

```

**POST** api/machine/{id}
Updates a specific machine based on id 

**Body :**
- ip
- log

**Returns :**
```json
uploaded_file_name
```


### PHP Artisan

The API has default cards and machines who can be seeded in the DB,

> php artisan migrate 

Will init the table structure needed to work

> php artisan db:seed

Will add every default card and machines to the API

