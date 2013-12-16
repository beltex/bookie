Bookie
======

### What

Bookie is a social finance tracking web app for desktop & mobile that hooks into the Facebook API. Wanna keep track of that coffee your friend owes you? How about that steak dinner last week, or those Leafs tickets? Bookie makes it seamless to keep track of who owes you money, and who you owe.

### Tech Stack

##### Back-end
- Apache Web Server
- PHP with CodeIgniter
- MySQL
- Facebook API

##### Front-end
- JavaScript
- HTML
- CSS
- Twitter Bootstrap 3.0

### Origin

U of T Hackathon 2013 hack.

### Why is it called Bookie?

Because LoneMe (and its many variations) sounds sleazy, and Turnip or Radish would continue the long line of fruits & vegetables.

### Working Localhost

To work localhost (or any custom base URL for that matter) update the following in application/config/config.php

 ```php
$config['base_url']	= 'http://<HOST_NAME_OR_IP>:8888/bookie';
 ```
