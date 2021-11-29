<p align="center"><img src="https://i.ibb.co/fvdwp1s/Mine-PHP-100x100.png"></img></p>
 
## MinePHP
An open source PHP framework for the Minecraft Server Status API.

## Installation
- Clone the repository in the first place.
```bash
git clone https://github.com/isferhossain/MinePHP.git
```

- Navigate to the cloned directory and copy the `mine.php` file. Finally, paste it in your own project folder.
<br>(PHP 7.0 or higher is recommended for standard use cases)

## Usage

```php
include "mine.php";
$minephp = new MinePHP("hypixel.net", "java"); // the "java" keyword can be replaced with "bedrock" if you're trying to access a Bedrock Minecraft server

// use the built-in features.
echo $minephp->ip;![68747470733a2f2f692e6962622e636f2f316437334e46702f4d696e655048502e706e67](https://user-images.githubusercontent.com/44488750/143909892-3c2ed964-ff58-4506-a167-ce95ee97c7b3.png)

```

Here's a list of all the built-in commands:
*  `max_players`
* `online_players`
* `hostname`
* `protocol`
* `version`
* `icon`
* `ip`
* `port`

## Contributing
Pull requests are welcome.

## License
[GPL v3](https://www.gnu.org/licenses/gpl-3.0.en.html)
