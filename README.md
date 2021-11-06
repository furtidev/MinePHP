## Installation

Download the repository and paste the mine.php file in your project directory. PHP 7 or higher is recommended.

## Usage

```php
include "mine.php";
$minephp = new MinePHP("hypixel.net", "java");
// load the data
$minephp->update_playercount();
$minephp->update_serverdata();
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
