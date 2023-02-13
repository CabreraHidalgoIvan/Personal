# DOM
## Direct access to nodes

* ```getElementsByTagName();``` -> ```p, div, h1...```
* ```getElementsByName();``` -> attribute name  -> ```<p name = "atribute-Name"> ---- </p>```
* ```getElementById();``` -> attribute id -> ```<div id = "id"> ---- </div>```

## Create and Delete nodes

#### Create

> 1. ```let p = document.createElement("p");```-> Create <b>p</b> node
> 2. ```let txt = document.createTextNode("Hello Wold");```-> Create <b>text</b> node
> 3. ```p.appendChild(txt);``` -> txt as child of element <b>p</b>
> 4. ```document.body.appendChild(p);``` -> add element as child of the document

#### Delete

> 1. ```let p = document.getElementById("id");```-> Select the element we want to delete
> 2. ```p.parentNode.removeChild(p);``` -> remove element