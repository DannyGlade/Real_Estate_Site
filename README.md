# Real Estate Site 
### Made By [***DannyGlade***](https://github.com/DannyGlade)
This is a Real E-state Site Project Made with Laravel, Bootstarp, JQuery, DataTables, FancyApp.
I only made it for my College Project, but if you are here that means I might have posted it online somewhere and you are here to steal it or see as refrence, but it's okay.

## What can you do in this website
- Admin can handle facilities, cities, categories, properties, Reviews, Users, Change Password & Site settings
- User can surf properties, handle their profile, Change Password & Save and review properties if logged in
- Yeah that's not much I know but I'm still making and It's a College Project so nothing Serious is gonna happen.
> Please Note!
> Beacause I am not good of a designer I have only used bootstrap, and nothing else, yet. So if you are looking for fancy site this might not be it. otherwise it looks decent enogh and funtionalities are also working... (obviously there will be some bugs)

## Dependencies
- [Composer v2.2.3^](https://getcomposer.org/download/)
- [Laravel v8.x](https://laravel.com/docs/8.x)
- [Bootstap v5.1.3](https://getbootstrap.com/docs/5.1/getting-started/introduction/)
- [Bootstrap v5.1 Examples](https://getbootstrap.com/docs/5.1/examples/) (Used Some of these as boiler plate)
- [Font Awesome](https://fontawesome.com/docs/web/setup/get-started)
- [JQuery v3.6.0](https://releases.jquery.com/)
- [DataTables v1.11.4](https://datatables.net/manual/) with [DataTables v1.11.4 Bootstap 5](https://datatables.net/examples/styling/bootstrap5.html)
- [FancyApps](https://fancyapps.com/docs/ui/installation)
  - [FancyBox](https://fancyapps.com/docs/ui/fancybox)
  - [Carousal](https://fancyapps.com/docs/ui/carousel)
- [CKEditor v4](https://ckeditor.com/docs/ckeditor4/latest/guide/index.html)
- And Familiarity with Laravel, Can't remember anything else...

## What needs to be installed...
- [Composer v2.2.3^](https://getcomposer.org/download/)
- [Git](https://git-scm.com/downloads)
- [Laravel v8.x](https://laravel.com/docs/8.x#the-laravel-installer)
- [Wamp](https://www.wampserver.com/en/) (I used Wamp you can use Similar ones)
- Can't remember anything else...

## Steps to Install
### Clone The GitHub Repo first
1. Open Cmd in folder you want to install project in...
2. Type below Command and hit enter...
```bash
git clone https://github.com/DannyGlade/Real_Estate_Site.git
```
4. Then cd into folder using below Command
```bash
cd Real_Estate_Site
```
> Note from here On, You can also use Terminal from VS Code or Your IDE...

### Install All Composer Dependencies
1. Use below command to install all dependencies then wait till all process is complete...
```bash
composer install
```

### Create a .env file
1. Duplicate *.env.example* as *.env* file
2. Fill information of your DB **username** and **password** & other info if needed...

### Create DataBase
1. Create DataBase by PhpMyadmin (provided by [Wamp](https://www.wampserver.com/en/)) or Any Other DB you use...
> Note DataBase name should be same as typed in *.env* file
### DataBase Structure
> I recommend to import DB structure Using `php artisan` method but you can use *.sql* file to import if you want.
1. Use below Command and wait till all migrations complete...
```bash
php artisan migrate
```
2. Use below Command to Link Storage to Public folder
```bash
php artisan storage:link
```

### Serve Project
1. Use below Command ( [Wamp](https://www.wampserver.com/en/)/Other Should be Runnig ) to run project...
```bash
php artisan serve
```
> if some *key* related error appears then use command `php artisan key:generate` to generate AppKey.

## Update Admin
Go to the Link that `php artisan serve` command gives you and Hopefully it should be working, I hope you are capable of any troubleshooting if any error occurs.

Admin site: `your_site_link/admin/dashboard`

- Admin Email
```bash
admin@admin.com
```
- Admin Password
```bash
admin123
```
Update CMS and Site Settings inside Admin Panel (/admin/dashboard) Once (empty or filled doesn't matter), and then goto frontend
> when project loads for first time db won't have values of CMS and Site setting, by updating those fields will be created, so frontend wouldn't show errors after that...

Reach out if you face any problems, Here are some Screenshots of this site with some dummy data, for more detailed documentation go to [Documentation](/Documentation)

### Home Page
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/1dbf28b5-4a5e-4822-827b-00339ad6a785">
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/657bc271-165d-47e9-9da1-6a641d581d46">
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/29f17a70-1b75-48ba-9399-1ad6714f6925">
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/1478f847-9851-4a78-8233-20b590d7d8d2">

### Properties Page
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/bae2a283-29e3-40ac-9b5d-f4482ac9ed5c">
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/993809d4-c9f9-4e25-8cea-3796168f75b2">
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/2f997e8c-7617-4f1a-9848-5bb8eb6469f2">
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/1ce4b7b2-c6f6-47f3-abb7-4c090495672d">
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/d74869b4-4222-49e1-afd5-c36b612c7ed9">

### Login/Signup Page
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/503d8ca5-b15f-477e-8929-c5d2c997a8e4">

### Profile Page
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/2086034c-b170-41c1-8017-8280928a3760">

### Saved Properties Page
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/641a89a1-7a40-4771-8d16-0a4440e3e11a">

### About Us/FAQs/Terms Pages
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/a384acd8-994f-4d9f-a8ba-5a4b9c261edd">
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/67557b0e-db15-46aa-8cab-2816d6015e66">
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/da3943ee-fae7-43ff-a789-2affeafe3984">

### CMS
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/be3a86ca-a896-4ac4-b8de-5218457b76da">
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/e05e2170-3eb3-4719-a485-4d861c685bb0">
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/c7b1dcf6-8de6-437d-9241-53229927b67c">
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/996f47fd-ec3f-4ec0-9bf0-ff84fa76eda6">
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/8805529c-aa10-48e0-a779-430742434482">
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/30434b2b-5a9f-441a-9223-682db1c5ead4">
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/1b3753ae-f0fc-489d-8f69-878245643fd5">
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/6c6394f6-ad70-4d1c-9697-c29d848edd1b">
<img width="452" alt="image" src="https://github.com/DannyGlade/Real_Estate_Site/assets/82282219/7f1fec5d-9212-44f1-93f1-0faab061aa66">

























If You are still reading, then Thanks and Welcome...

Hope My project helps you any ways...

