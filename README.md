# MinePHP
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
echo $minephp->ip;
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
