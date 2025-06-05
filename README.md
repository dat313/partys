# Party Invitation Wizard

This repository contains a minimal Laravel skeleton with an ECMAScript wizard for creating and sending event invitations. It demonstrates how to collect event details, add guests, and send email invitations.

## Setup
1. Install PHP and Composer.
2. Run `composer install` to install Laravel dependencies listed in `composer.json`.
 main
3. Configure your `.env` file and set up mail credentials.
4. Serve the application using `php artisan serve`.

## Usage
Open the site in your browser. The wizard guides you through:
1. **Event Details** – title, date and location.
2. **Guests** – add guest email addresses.
3. **Confirm** – review and send invitations. Emails are sent using Laravel's mailing system.

This code is simplified for illustration purposes and may require additional configuration for production use.
