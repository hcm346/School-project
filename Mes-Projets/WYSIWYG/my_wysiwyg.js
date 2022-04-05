(function ($) {
    jQuery.fn.my_wysiwyg = function (options) {
        let parameters = $.extend({
            buttons: ["bold", "italic"],
            style: "classic"
        }, options);

        let buttonsBar = $('<div>');
        $(buttonsBar).addClass("bar");
        // $('').addClass(parameters.style)
        $(buttonsBar).addClass(parameters.style);
        $('#text_box').addClass(parameters.style)

        $(parameters.buttons).each(function (elem) {
            let buttonNew = $('<button></button>').addClass("bar_button");
            switch (parameters.buttons[elem]) {
                case 'bold':
                    buttonNew.html("<b>G</b>");
                    buttonNew.click(function () {
                        document.designMode = "on";

                        let selection = document.getSelection(); // récupère la sélection
                        let selectRange = selection.getRangeAt(0); // Commence la récupération au départ 

                        document.execCommand("bold");
                        document.designMode = "off";
                    });
                    buttonsBar.append(buttonNew);
                    break;
                case 'italic':
                    buttonNew.html("<i>I</i>")
                    buttonNew.click(function () {
                        document.designMode = "on";

                        let selection = document.getSelection(); // récupère la sélection
                        let selectRange = selection.getRangeAt(0); // Commence la récupération au départ 

                        document.execCommand("italic");
                        document.designMode = "off";
                    });
                    buttonsBar.append(buttonNew);
                    break;
                case 'color':
                    let buttonColorWhite = $('<button>I</button>').addClass("bar_button").text("").addClass("bar_button--white");
                    buttonColorWhite.click(function () {
                        document.designMode = "on";

                        let selection = document.getSelection(); // récupère la sélection
                        let selectRange = selection.getRangeAt(0); // Commence la récupération au départ 

                        document.execCommand('styleWithCSS', false, true);
                        document.execCommand('foreColor', false, "white");
                        document.designMode = "off";
                    });
                    buttonsBar.append(buttonColorWhite);

                    let buttonColorBlack = $('<button>I</button>').addClass("bar_button").text("").addClass("bar_button--black");
                    buttonColorBlack.click(function () {
                        document.designMode = "on";

                        let selection = document.getSelection(); // récupère la sélection
                        let selectRange = selection.getRangeAt(0); // Commence la récupération au départ 

                        document.execCommand('styleWithCSS', false, true);
                        document.execCommand('foreColor', false, "black");
                        document.designMode = "off";
                    });
                    buttonsBar.append(buttonColorBlack);

                    let buttonColorR = $('<button>I</button>').addClass("bar_button").text("").addClass("bar_button--red");
                    buttonColorR.click(function () {
                        document.designMode = "on";

                        let selection = document.getSelection(); // récupère la sélection
                        let selectRange = selection.getRangeAt(0); // Commence la récupération au départ 

                        document.execCommand('styleWithCSS', false, true);
                        document.execCommand('foreColor', false, "red");
                        document.designMode = "off";
                    });
                    buttonsBar.append(buttonColorR);

                    let buttonColorG = $('<button>I</button>').addClass("bar_button").text("").addClass("bar_button--green");
                    buttonColorG.click(function () {
                        document.designMode = "on";

                        let selection = document.getSelection(); // récupère la sélection
                        let selectRange = selection.getRangeAt(0); // Commence la récupération au départ 

                        document.execCommand('styleWithCSS', false, true);
                        document.execCommand('foreColor', false, "green");
                        document.designMode = "off";
                    });

                    buttonsBar.append(buttonColorG);
                    let buttonColorB = $('<button>I</button>').addClass("bar_button").text("").addClass("bar_button--blue");
                    buttonColorB.click(function () {
                        document.designMode = "on";

                        let selection = document.getSelection(); // récupère la sélection
                        let selectRange = selection.getRangeAt(0); // Commence la récupération au départ 

                        document.execCommand('styleWithCSS', false, true);
                        document.execCommand('foreColor', false, "blue");
                        document.designMode = "off";
                    });

                    buttonsBar.append(buttonColorB);
                    break;
                case 'strikeThrough':
                    buttonNew.html("<del>S</del>")
                    buttonNew.click(function () {
                        document.designMode = "on";

                        let selection = document.getSelection(); // récupère la sélection
                        let selectRange = selection.getRangeAt(0); // Commence la récupération au départ 

                        document.execCommand("strikeThrough");
                        document.designMode = "off";
                    });
                    buttonsBar.append(buttonNew);
                    break;
                case 'font-size':
                    buttonNew.html("A+")

                    buttonNew.click(function () {
                        document.designMode = "on";

                        let selection = document.getSelection(); // récupère la sélection
                        let selectRange = selection.getRangeAt(0); // Commence la récupération au départ 

                        document.execCommand("fontSize", false, "5");
                        document.designMode = "off";

                    });
                    buttonsBar.append(buttonNew);
                    let buttonNormal = $('<button>A</button>').addClass("bar_button");
                    buttonNormal.click(function () {
                        document.designMode = "on";

                        let selection = document.getSelection(); // récupère la sélection
                        let selectRange = selection.getRangeAt(0); // Commence la récupération au départ 

                        document.execCommand("fontSize", false, "3");
                        document.designMode = "off";
                    });
                    buttonsBar.append(buttonNormal);
                    let buttonDecrease = $('<button>A-</button>').addClass("bar_button");
                    buttonDecrease.click(function () {
                        document.designMode = "on";

                        let selection = document.getSelection(); // récupère la sélection
                        let selectRange = selection.getRangeAt(0); // Commence la récupération au départ 

                        document.execCommand("fontSize", false, "2");
                        document.designMode = "off";
                    });
                    buttonsBar.append(buttonDecrease);
                    break;




            }
        });
        let thisParent = $(this).parent();
        $(thisParent).append(buttonsBar);

        return buttonsBar;
    };
})(jQuery)