# Fresh Smiles

Fresh Smiles is a PHP/MySQL application that has been built using Freshdesk's API. It is being used for the [Say Cheese contest](http://www.freshdesk.com/say-cheese) and creates a customer satisfaction report for businesses. It has been inspired by the [37 Signals Smiley page](http://smiley.37signals.com).

To get started, you will need a Freshdesk account where you have enabled Customer Satisfaction Surveys. Once you have start receiving feedback, your smiles page will update consistently to reflect the latest 100 ratings submitted by your users. In case you are wondering, green smileys mean awesome, yellow ones mean just okay, and red ones mean bad.

You can check out how it works [here](http://smiles.freshdesk.com)

## Minimum Requirements
1. PHP
2. MySQL
3. Cron

## Installation
1. Setup a MySQL Table using /scrips/schema.sql
2. Copy /inc/config-sample.php to /inc/config.php (local or private deployment)
3. Copy /inc/smiley-config-sample.php to /inc/smiley-config.php (local or private deployment)
4. Setup /scripts/cron.php to run via cronjob (1 hour or more)

## Deployment
1. Setup a project with DeployHQ
2. Setup config files in DeployHQ (config.php & smiley-config.php)
3. Deploy Project to your website (preferably at yourwebsite.com/fresh-smiles/)


## Modules
Built with:
  - [FreshDesk Rest](https://github.com/phikai/freshdesk-rest) by [phikai](https://github.com/phikai)
  
## License
Licensed under the MIT Licnese, see [LICENSE](license)
