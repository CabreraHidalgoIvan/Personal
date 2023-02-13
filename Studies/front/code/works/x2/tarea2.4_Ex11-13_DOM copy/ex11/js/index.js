window.onload = function () {
    // ------------------------------------------------------ \\
    // First Exercise: Number of links on the document
    let links = document.getElementsByTagName("a");
    console.log(`There are ${links.length} links on the document`);

    // ------------------------------------------------------ \\
    // Second Exercise: Href of second last link
    console.log(`The second link's href is ${links[links.length - 2]}`);

    // ------------------------------------------------------ \\
    // Third Exercise: Number of links with "http://prueba"
    let count = 0;

    for (let i = 0; i < links.length; i++) {
        // ---------- match form ---------- \\
        if (links[i].href.match("http://prueba/")) {
            count++;
        }

        // ---------- comparison form ---------- \\
        // if (links[i].href == ('http://prueba/')) {
        //     count++;
        // }
    }

    console.log(`There are ${count} links with "http://prueba/`);

    // ------------------------------------------------------ \\
    // Fourth Exercise: Number of links on third paragraph
    let p = document.getElementsByTagName("p");
    let linksParagraph3 = p[2].getElementsByTagName("a");

    console.log(`There are ${linksParagraph3.length} links on the paragraph 3`);
};
