var start = new Date().getTime()

function getBackgroundColor() {
    var bgColor = "#"
    var chars = '51a8c9b06e73d24f'

    for (var i = 0; i < 6; i++) {
        bgColor += chars[Math.floor(Math.random() * 16)]
    }

    return bgColor
}

function makeShape() {
    start = new Date().getTime()

    var width = Math.random() * 500 + "px"
    var height = Math.random() * 500 + "px"
    var borderRadius = "0%"
    var top = Math.random() * 300 + "px"
    var left = Math.random() * 700 + "px"

    if ((Math.random()) >= .8) {
        borderRadius = "100%"
    } else if ((Math.random()) >= .6) {
        borderRadius = "70%"
    } else if ((Math.random()) >= .4) {
        borderRadius = "50%"
    } else if ((Math.random()) >= .2) {
        borderRadius = "30%"
    }

    document.getElementById('shape').style.width = width
    document.getElementById('shape').style.height = height
    document.getElementById('shape').style.borderRadius = borderRadius
    document.getElementById('shape').style.top = top
    document.getElementById('shape').style.left = left
    document.getElementById('shape').style.backgroundColor = getBackgroundColor()
    document.getElementById('shape').style.display = "block"
}

function showShape() {
    var time = Math.random() * 1000
    setTimeout(makeShape, time)
}

showShape()

document.getElementById('shape').onclick = function() {
    document.getElementById('shape').style.display = "none"

    var end = new Date().getTime()
    var timeTaken = (end - start) / 1000 // this is in millisec, convert to sec

    document.getElementById('timeTaken').innerHTML = timeTaken

    showShape()
}
