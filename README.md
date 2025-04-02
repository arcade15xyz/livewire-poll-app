# LIVEWIRE-POLLS-APP

## Starting

🚀. Make a Laravel Project using  
 `laravel new example-app`
🚀. Now to install **Livewire**
`composer require livewire/livewire`
🚀. We need to use the following Assets (directives):

> a. **@livewireStyles**: Styles from livewire.
> b. **@livewireScript**: JavaScripts returns. Helps in communication with the backend using livewire.
> _Read more about these from doucmentations_

**Important Error**: always do migrations in the flow the relations are made else on migrating in group don't work. In such cases we need to do the migrations seprately for each model.

```
php artisan make:migration create_polls_table

php artisan make:migration create_options_table

php artisan make:migration create_votes_table
```

[READ the Docs](https://livewire.laravel.com/docs/quickstart)
