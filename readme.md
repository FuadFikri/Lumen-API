# Simple Lumen REST API 
 
## Without Authentication
GET
+ https://tugasharisenin.herokuapp.com
+ https://tugasharisenin.herokuapp.com/users

POST
+ https://tugasharisenin.herokuapp.com/register
  - name
  - email
  - password
  
+ https://tugasharisenin.herokuapp.com/login
  - email
  - password
  
  
 ## Need Authentication

create (POST)
  + https://tugasharisenin.herokuapp.com/create
    - title
    - year
    - author
    - city
    - publisher

show, update, delete (GET, PUT,DELETE)
  + https://tugasharisenin.herokuapp.com/book/{id}
    

