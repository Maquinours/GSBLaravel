function needConfirm(text, route) {
    if(confirm(text))
        window.location.href = route;
}