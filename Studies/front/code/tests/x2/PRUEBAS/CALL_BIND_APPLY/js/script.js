const user = {
    name: "Paolo"
}

const business = {
    name: "1 DAW Corporation"
}

function showInfo(likes,friends){
    console.log(`${this.name} tiene ${likes} y ${friends} amigos`);
}
// showInfo.apply(business,[5,9]);
// showInfo.call(user,7,10);
// const newShowinfo = showInfo.bind(user);
// newShowinfo(34,56);