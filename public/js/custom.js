
$('#contactConfirmationBtnId').click(function () {

    var name=$('#contactNameId').val();
    var subject=$('#contactSubjectId').val();
    var email=$('#contactEmailId').val();
    var message=$('#contactMessageId').val();

    contactSend(name,subject,email,message);

});

function contactSend(name,subject,email,message) {

    if(name.length==0){
        $.notify("Enter Your Name", "error");
    }else if(email.length==0){
        $.notify("Enter Your Email", "error");
    }else if(subject.length==0){
        $.notify("Enter Your Subject", "error");
    }else if(message.length==0){
        $.notify("Enter Your Message", "error");
    }else{

        axios.post('/contactSend',{
            name:name,
            subject:subject,
            email:email,
            message:message
        }).then(function (response) {

            if(response.status==200){
                swal("Thank You So Much", "Your request has been successful", "success");

            }else{
                $.notify("Something Went Wrong", "error");
            }

        }).catch(function (error) {

        });
    }
}


$('.view_data').click(function () {

    var id=$(this).attr("id");
    $('#viewModal').modal('show');
    CardDetails(id);
});

function CardDetails(id) {

    axios.post('/getDetails',{id:id}).then(function (response) {

        if(response.status==200){

            var data=response.data;

            $('#cardDetailsId').html(

                "<div class='container'><div class='row'>" +
                "<div class='col-md-6'><img class='w-100' src="+data[0].image+" alt=''></div>" +
                "<div class='col-md-6 text-justify'><h4 class='modalTop'>"+data[0].name+"</h4><p class='modalDetails'>"+data[0].description+"</p></div>" +
                "</div>" +
                "</div>"

            );
        }

    }).catch(function (error) {

    });

}

