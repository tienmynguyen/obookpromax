/* Documentation sample */



src = "https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"
src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
const pdfUrl = "../docs/sach/" + bookid + ".pdf";

function loadPage(page) {
    getImageDataURL(page - 2)
        .then(function(imgData) {
            var img = $("<img />");
            img.load(function() {
                var container = $(".sample-docs .p" + page);
                img.css({ width: container.width(), height: container.height() });
                img.appendTo(container);
                container.find(".loader").remove();
            });
            img.attr("src", imgData);
        })
        .catch(function(error) {
            console.error('Lỗi khi lấy URL hình ảnh: ', error);
        });
}



function getImageDataURL(pageNumber) {

    return pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
        return pdf.getPage(pageNumber).then(function(page) {
            const viewport = page.getViewport({
                scale: 3,
            });
            const canvas = document.createElement("canvas");
            const context = canvas.getContext("2d");

            canvas.width = viewport.width;
            canvas.height = viewport.height;

            return page.render({
                canvasContext: context,
                viewport: viewport,
            }).promise.then(function() {
                // Chuyển đổi canvas thành URL hình ảnh và trả về nó dưới dạng chuỗi

                return canvas.toDataURL();

            });
        });
    });
}


function addPage(page, book) {
    var id,
        pages = book.turn("pages");

    var element = $("<div />", {});

    if (book.turn("addPage", element, page)) {
        if (page < 100) {
            element.html('<div class="gradient"></div><div class="loader"></div>');
            loadPage(page);
        }
    }
}


function updateTabs() {
    var tabs = {
            7: "chương 1-8",
            34: "chương 9-10",
            48: "chương 11-12",
            61: "chương 13-14",
        },
        left = [],
        right = [],
        book = $(".sample-docs"),
        actualPage = book.turn("page"),
        view = book.turn("view");

    for (var page in tabs) {
        var isHere = $.inArray(parseInt(page, 10), view) != -1;

        if (page > actualPage && !isHere)
            right.push('<a href="#page/' + page + '">' + tabs[page] + "</a>");
        else if (isHere) {
            if (page % 2 === 0)
                left.push(
                    '<a href="#page/' + page + '" class="on">' + tabs[page] + "</a>"
                );
            else
                right.push(
                    '<a href="#page/' + page + '" class="on">' + tabs[page] + "</a>"
                );
        } else left.push('<a href="#page/' + page + '">' + tabs[page] + "</a>");
    }

    $(".sample-docs .tabs .left").html(left.join(""));
    $(".sample-docs .tabs .right").html(right.join(""));
}

function numberOfViews(book) {
    return book.turn("pages") / 2 + 1;
}

function getViewNumber(book, page) {
    return parseInt((page || book.turn("page")) / 2 + 1, 10);
}

function moveBar(yes) {
    if (Modernizr && Modernizr.csstransforms) {
        $("#slider .ui-slider-handle").css({ zIndex: yes ? -1 : 10000 });
    }
}

function setPreview(view) {
    var previewWidth = 115,
        previewHeight = 73,
        previewSrc = "pics/preview.jpg",
        preview = $(_thumbPreview.children(":first")),
        numPages =
        view == 1 || view == $("#slider").slider("option", "max") ? 1 : 2,
        width = numPages == 1 ? previewWidth / 2 : previewWidth;

    _thumbPreview.addClass("no-transition").css({
        width: width + 15,
        height: previewHeight + 15,
        top: -previewHeight - 30,
        left: ($($("#slider").children(":first")).width() - width - 15) / 2,
    });

    preview.css({
        width: width,
        height: previewHeight,
    });

    if (
        preview.css("background-image") === "" ||
        preview.css("background-image") == "none"
    ) {
        preview.css({ backgroundImage: "url(" + previewSrc + ")" });

        setTimeout(function() {
            _thumbPreview.removeClass("no-transition");
        }, 0);
    }

    preview.css({
        backgroundPosition: "0px -" + (view - 1) * previewHeight + "px",
    });
}
// -------------------------------------------------------------