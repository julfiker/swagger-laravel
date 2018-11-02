# swagger api documentation for laravel 
Api documentation based on swagger in Laravel framework. It would serve run time environment with the ui based on swagger ui latest released. You can test and documenting about the every each action and request object along with each properties you can explain.  Just annotation based. you can manage everything as you needs.

_Note: - only for laravel framework. It would competitable with any lts version of laravel._

## Instuction how to use the package on laravel.
**Install package by composer:**  
``` composer require julfiker/swagger-laravel ```  
Just run composer require command with package name. This assumes you have composer installed and available in your path as composer. Instruction to have composer https://getcomposer.org/doc/00-intro.md.  


__Usage instruction by annotation:__  
Add annotations to your php files. You must need to use ```@OA\Info()``` only one time in any php files under the app directly. I can recomment to home or welcome page controller that it would render your application home page. Then add each controller action in the appi controller class.
```
/**
 * Only one time for the application
 * @OA\Info(title="My Laravel REST API", version="1.0") 
 */
 class WelcomeController {
   //Action method and others
 }

/**
 * Action method
 * @OA\Get(
 *     path="/v1/resources",
 *     @OA\Response(response="200", description="About the resources")
 * )
 */
 public function index(){
   //Your code
 }
```  
For further study on annotation to use - http://zircote.com/swagger-php/Getting-started.html#annotation-placement

__Access swagger documents:__  
``` {{url}}/swagger/doc ```


**Any Help?**  
You can contact me if you need anything on this regards, My contaction inforamtion ~  
_email:_ `mail.julfiker@gmail.com`   
_skype:_ `eng.jewel`   
  
Enjoy!!! :smile:
