<?php
class Shape
{
    function __call($name,$args)
    {
        if($name=="area")
        {
            switch(count($args))
            {
                case 0:
                    return 0;
                    case 1:
                        return $args[0]*$args[0];
                        break;
                        case 2:
                            return $args[0]*$args[1];
                            break;
            }
        }
    }
}
# Now test class Shape
$sh=new Shape();
echo "Area of square=".$sh->area(10)."<br/>";
echo "Area of rect=".$sh->area(10,5)."<br/>";
echo "Area=".$sh->area()."<br/>";
?>