var schema="jk", d="/",
sharparp={
    push: function(datt){
        if(Object.keys(datt).length >= 2 ){
            window.location.href= schema+":"+d+d+(Math.random().toString(36).substring(2, 2 + 6))+d+btoa(JSON.stringify(datt));
        }else{
            throw new Error('Message:- sharparp data empty'+
                '\nData:- '+JSON.stringify(datt)+
                "\nLength:- "+Object.keys(datt).length);
        }
    },

    option:{
        title:{
            href:"href",
            setlogout: "setlogout",
            toast: "toast",
            snackbar: "snackbar",

        }
    }
}

// sharparp.push({
//     title: sharparp.option.setlogout,
//     value: null
// });