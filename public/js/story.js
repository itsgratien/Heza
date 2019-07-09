const token = Jquery("input[name='_token']").val();
let loading =Jquery(".loading-bar");
let imageTag=Jquery(".imageURL");
let successMsg=Jquery(".success-message");
let errorMsg=Jquery(".error-message");
    Jquery(".upload-image").on("click",function(){
        Jquery(".input-upload-file").trigger("click");
    });
    Jquery(".input-upload-file").on("change",function(event){
        const files=event.target.files[0];
        let fileReader = new FileReader();
        fileReader.onload=function(e){
            uploadImage(e.target.result);
        };

        fileReader.readAsDataURL(files);
    });
const uploadImage=(file)=>{
    loading.css('display','block');
    let form = new FormData();
    form.append('image',file);
    form.append('_token',token)
    Jquery.ajax({
        method: 'POST',
        url:'/story/upload-image',
        data:form,
        contentType: false,
        processData:false,
        headers:{
            accepts:'multipart/form-data'
        }
    })
    .done(function(data){
        loading.css('display','none');
     let imageURL = data.data.secure_url;
     imageTag.attr('src',imageURL);
    })
    .fail(function(error){
        loading.css('display','none');
        alert('something try to upload image again');
    });
}

//submit
Jquery(".publish-btn").on("click",function(e){
  e.preventDefault();
    let imgData= imageTag.attr("src") !=="" ? imageTag.attr("src") : null;
    let title = Jquery(".create-story-title")[0].innerHTML;
    let slug = Jquery(".create-story-title")[0].innerText;
    let body = Jquery(".create-body")[0].innerHTML;
  loading.css('display','block');
  Jquery.ajax({
      method: 'POST',
      url: '/story',
      data:{
          _token:token,
          title,
          story:body,
          slug,
          image:imgData
      }
  })
  .done(function(data){
    loading.css('display','none');
    successMsg.css('display','block');
    successMsg.append(data.message);
    setTimeout(function(){
    window.location.replace(`/story/${data.data}`);
    }, 500);
  })
  .fail(function(error){
    loading.css('display','none');
  })
});

Jquery(".update-btns").on("click",function(e){
  e.preventDefault();
  let imgData= imageTag.attr("src") !=="" ? imageTag.attr("src") : null;
  let title = Jquery(".create-story-title")[0].innerHTML;
  let slug = Jquery(".create-story-title")[0].innerText;
  let body = Jquery(".create-body")[0].innerHTML;
  let storyID= Jquery("#storyID").val();
  loading.css('display','block');
  Jquery.ajax({
      method: 'PATCH',
      url: `/story/${storyID}`,
      data:{
          _token:token,
          title,
          story:body,
          slug,
          image:imgData
      }
  })
  .done(function(data){
      successMsg.css("display","block");
      successMsg.append(data.message);
      setTimeout(function(){window.location.reload(true)},1000);
  })
  .fail(function(errorD){
    loading.css('display','none');
    const manageError=errorD.responseJSON;
    const {error, errors} = manageError;
    errorMsg.css('display','block');
    if(error) errorMsg.append(error);
    if(errors){
    errorMsg.append(`<ul>
    <li>${errors.title ? errors.title : ''}</li>
    <li>${errors.story ? errors.story : ''}</li>
    </ul>`);
    }

  })
})


