<?php
namespace App\Providers;
use App\condidat; // write model name here
use Illuminate\Support\ServiceProvider;
class TousCvsProvider extends ServiceProvider
{
public function boot()
{
view()->composer('*',function($view){
$view->with('arrayname',condidat::all());
});
}

}