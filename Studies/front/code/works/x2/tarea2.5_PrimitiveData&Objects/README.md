### Creates an array with different data examples. In addition to NaN and null it includes
* all primitives (minus Symbol()) and
* several non-primitives (new Date()...), including function declarations.
### Run it with the for statement (not the classic one) and use:
* typeof to indicate whether it is primitive or not.
* instanceof to find out the type of object it is (Array, String...)

> * In case it is primitive, it indicates:
>   * PRIMITIVE - (primitive type) - value
> * In case of being objected, it indicates:
>   * OBJECT - (true) - of type Constructor - value.

### Uses:
* ```object.constructor.name``` for instanceof operator.
* template String to avoid string concatenation.
* ```error.message``` in case of having to catch an exception.