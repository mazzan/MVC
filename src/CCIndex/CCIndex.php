 <?php
/**
 * Standard controller layout.
 * 
 * @package RamaCore
 */
class CCIndex implements IController {

  /**
    * Implementing interface IController. All controllers must have an index action.
   */
  public function Index() {  
    global $ra;
    $ra->data['title'] = "The Index Controller";
    $ra->data['main'] = "<h1>The Index Controller</h1>";
  }
  

}  
