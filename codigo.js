$("#loginForm").submit(function (e) {
  e.preventDefault();

  const username = $("#username").val() || null;
  const password = $("#password").val() || null;

  if (!username || !password) {
    Swal.fire({
      title: "Error",
      text: `More fields are required`,
      icon: "error",
      confirmButtonColor: "#1b2735",
    });

    return false;
  } else {
    $.ajax({
      type: "POST",
      url: "../bd/login.php",
      datatype: "json",
      data: {
        username: username,
        password: password,
      },
      success: function (response) {
        if (response != "null") {
          const [data] = JSON.parse(response);

          Swal.fire({
            title: "Connected",
            text: `${data.username}, welcome to the system`,
            icon: "success",
            confirmButtonColor: "#00ff00",
            showCancelButton: false,
            showConfirmButton: false,
            timer : 2000,
          }).then((result) => {
            $("#username").val("");
            $("#password").val("");
            window.location.href = "./";
          });
        } else {
          Swal.fire({
            title: "Error",
            text: `Username or password may be incorrect, try again`,
            icon: "error",
            confirmButtonColor: "#ff0000",
            timer : 1000,
          }).then((result) => {
            $("#username").val("");
            $("#password").val("");
          });
        }
      },
    });
  }
});

