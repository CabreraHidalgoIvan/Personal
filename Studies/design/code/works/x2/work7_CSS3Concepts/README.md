# Combinators CSS3

1. Adjacent Sibling Selector
2. General Sibling Selector
3. Child Selector
4. Descendant Selector

#### 1. Adjacent Sibling Selector (+)

> * Is used to select the first element that is directly after the specified element
>> ```div + p { background-color: yellow; }```
>> 1. Will only takes the first p that is after a div 
>> 2. If there is no ```div``` with a ```p``` after it, it will not works.

#### 2. General Sibling Selector (~)

> * Is used to select all elements that are directly after the specified element with the character ~
>> ```div ~ p { background-color: yellow; }```
>> 1. Will take all elements p that is after a div 
>> 2. If there is no ```div``` with a ```p``` after it, it will not works, like the paragraph inside the div, or the paragraph after an h1.

#### 3. Child Selector (>)

> * The child selector selects all elements that are children of the element div (in this situation).
>> ```div > p { background-color: yellow; }```
>> 1. Will take all elements p that is inside a div, but only in the first level, I mean, if there is another div with p elements inside it, it will not be afected.
>> 2. If there is no ```div``` with a ```p``` inside it, it will not works.

#### 3. Descendant Selector ( )

> * The descendant selector selects all elements that are descendants of the element div (in this situation).
>> ```div  p { background-color: yellow; }```
>> 1. Will takes all elements p that is inside a div, even if it's a div with elements p inside it, it will takes all.
>> 2. If there is no ```div``` with a ```p``` inside it, it will not works.