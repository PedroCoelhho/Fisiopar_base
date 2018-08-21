/*jslint devel: true */

// Objeto para mudar o estilo da linha da tabela
var mudaTabela = {
    clica: function () {
        "use strict";
        this.parentNode.classList.add("selected");
    },
    desclica: function () {
        "use strict";
        this.parentNode.classList.remove("selected");
    }
};
function myApp(arg) {
    "use strict";
}
