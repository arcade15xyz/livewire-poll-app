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


## First Livewire component (CreatePoll.php)
```
php artisan make:livewire CreatePoll
```
The above command basically create a file named `app/Livewire/CreatePoll.php` and also a component in `resources/views/livewire/create-poll.blade.php`. So now we need to this component in `app.blade.php ` like this   
```php
  @livewire('create-poll')
```
The whole file must look like this `app.blade.php`:
```php
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel Livewire Poll</title>

  <script src="https://cdn.tailwindcss.com"></script>

  {{-- blade-formatter-disable --}}
  <style type="text/tailwindcss">
    .btn {
      @apply rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50
    }

    label {
      @apply block uppercase text-slate-700 mb-2
    }

    input,
    textarea {
      @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
    }

    .error {
      @apply text-red-500 text-sm
    }
  </style>
  {{-- blade-formatter-enable --}}

  @livewireStyles
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
  @livewireScripts

  @livewire('create-poll')
</body>

</html>

```
and there is need for `@livewireStyles` and `@livewireScripts` these helps us in maintaining styles and with scripting (dynamic) like in `javascript` `react` etc. So what I learned is **livewire** helps in fuctionality like `javascript` without need for that.   
now lets see in the *Component* file `create-poll.blade.php` here we define the component code like:
```php
<div>
    <form>
        <label>Poll Title</label>

        <input type="text" wire:model.live="title">

        Current title: {{ $title }}
    </form>
</div>

```
`wire:model.live` help us with dynamic functioning. in Livewire 3, wire:model is "deferred" by default (instead of by wire:model.defer). To achieve the same behavior as wire:model from Livewire 2, you must use wire:model.live.

[To know more about **Components**](https://livewire.laravel.com/docs/components)
   
[To know more about `wire:model.live` CLICK](https://livewire.laravel.com/docs/wire-model#live-updating)
