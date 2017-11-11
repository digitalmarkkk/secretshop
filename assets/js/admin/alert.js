/**
 * Sweetalerts demo page
 */
(function($) {
  'use strict';

$('.update-members').on('click',function(e) {

    e.preventDefault();

    swal({
      title: "Are you sure?",
      text: 'All the details are correct?',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {
          
          swal('Checking!', 'Validating details on process, please wait...', 'success');
          
          setTimeout(function() {
              $('form#update-members').submit();
          }, 1000);

        }else{
          swal('Canceled!', 'Update canceled!', 'error');
        }
      });

    return false;
});

$('.delete-members').on('click',function(e) {

    var url = $(this).attr('href');

    e.preventDefault();

    swal({
      title: "Are you sure?",
      text: 'Are you sure that you want to delete this member?',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {

          swal('Deleting!', 'Deleting member on process.', 'success');

          setTimeout(function() {
               window.location.href = url;
          }, 1000);

        }else{
          swal('Canceled!', 'Deleting member canceled!', 'error');
        }
      });

    return false;
});

$('.reject-members').on('click',function(e) {

    var url = $(this).attr('href');

    e.preventDefault();

    swal({
      title: "Reject Application?",
      text: 'Are you sure that you want to reject this member?\nThis action will delete the member completely.',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {
          
          swal('Reject!', 'Deleting member on process.', 'success');

          setTimeout(function() {
              window.location.href = url;
          }, 1000);
          
        }else{
          swal('Canceled!', 'Members reject canceled!', 'error');
        }
      });

    return false;
});

$('.accept-members').on('click',function(e) {

    var url = $(this).attr('href');

    e.preventDefault();

    swal({
      title: "Accept Application?",
      text: 'Are you sure that you want to accept this member?',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {
          
          swal('Accepted!', 'Member application is on process.', 'success');

          setTimeout(function() {
              window.location.href = url;
          }, 1000);
          
        }else{
          swal('Canceled!', 'Members accept canceled!', 'error');
        }
      });

    return false;
});

$('.set-admin').on('click',function(e) {
    
    var url = $(this).attr('href');

    e.preventDefault();

    swal({
      title: "Set Employees Account?",
      text: 'Are you sure that you want to set this employees account?',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {

          swal('Processing', 'Setting employees account on process.', 'success');

          setTimeout(function() {
              window.location.href = url;
          }, 1000);
          
        }else{
          swal('Canceled!', 'Setting employees account canceled!', 'error');
        }
      });

    return false;
});

$('.set-contributor').on('click',function(e) {
    
    var url = $(this).attr('href');

    e.preventDefault();

    swal({
      title: "Set Employees Account?",
      text: 'Are you sure that you want to set this employees account?',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {

          swal('Processing', 'Setting employees account on process.', 'success');

          setTimeout(function() {
              window.location.href = url;
          }, 1000);
          
        }else{
          swal('Canceled!', 'Setting employees account canceled!', 'error');
        }
      });

    return false;
});

$('.block-account').on('click',function(e) {
    
    var url = $(this).attr('href');

    e.preventDefault();

    swal({
      title: "Block Account?",
      text: 'Are you sure that you want to block this employees account?',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {

          swal('Processing', 'Blocking employees account on process.', 'success');

          setTimeout(function() {
              window.location.href = url;
          }, 1000);
          
        }else{
          swal('Canceled!', 'Blocking employees account canceled!', 'error');
        }
      });

    return false;
});

$('.unblock-account').on('click',function(e) {
    
    var url = $(this).attr('href');

    e.preventDefault();

    swal({
      title: "Unblock Account?",
      text: 'Are you sure that you want to unblock this employees account?',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {

          swal('Processing', 'Unblocking employees account on process.', 'success');

          setTimeout(function() {
              window.location.href = url;
          }, 1000);
          
        }else{
          swal('Canceled!', 'Unblocking employees account canceled!', 'error');
        }
      });

    return false;
});

$('.resign-account').on('click',function(e) {
    
    var url = $(this).attr('href');

    e.preventDefault();

    swal({
      title: "Resign Employees Account?",
      text: 'Are you sure that you want to resign this employees account?',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {

          swal('Processing', 'Resigning employees account on process.', 'success');

          setTimeout(function() {
              window.location.href = url;
          }, 1000);
          
        }else{
          swal('Canceled!', 'Resigning employees account canceled!', 'error');
        }
      });

    return false;
});

$('.unresign-account').on('click',function(e) {
    
    var url = $(this).attr('href');

    e.preventDefault();

    swal({
      title: "Hire this Employee?",
      text: 'Are you sure that you want to hire this employee?',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {

          swal('Processing', 'Hiring employee on process.', 'success');

          setTimeout(function() {
              window.location.href = url;
          }, 1000);
          
        }else{
          swal('Canceled!', 'Hiring employee canceled!', 'error');
        }
      });

    return false;
});

$('.set-del-account').on('click',function(e) {

    var url = $(this).attr('href');

    e.preventDefault();

    swal({
      title: "Are you sure?",
      text: 'Are you sure that you want to delete this account?',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {

          swal('Deleting!', 'Deleting account on process.', 'success');

          setTimeout(function() {
               window.location.href = url;
          }, 1000);

        }else{
          swal('Canceled!', 'Deleting account canceled!', 'error');
        }
      });

    return false;
});

$('.set-dev-account').on('click',function(e) {
    
    var url = $(this).attr('href');

    e.preventDefault();

    swal({
      title: "Set Employee Account?",
      text: 'Are you sure that you want to set this employees account?',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {

          swal('Processing', 'Setting employees account on process.', 'success');

          setTimeout(function() {
              window.location.href = url;
          }, 1000);
          
        }else{
          swal('Canceled!', 'Setting employees account canceled!', 'error');
        }
      });

    return false;
});

$('.update-users-acct').on('click',function(e) {

    e.preventDefault();

    swal({
      title: "Are you sure?",
      text: 'All the details are correct?',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {
          
          swal('Checking!', 'Validating details on process, please wait...', 'success');
          
          setTimeout(function() {
              $('form#update-users-acct').submit();
          }, 1000);

        }else{
          swal('Canceled!', 'Update canceled!', 'error');
        }
      });

    return false;
});

$('.update-users-pass').on('click',function(e) {

    e.preventDefault();

    swal({
      title: "Change Password?",
      text: 'Are you sure that you want to change your password?',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {
          
          swal('Checking!', 'Changing password on process, please wait...', 'success');
          
          setTimeout(function() {
              $('form#update-users-pass').submit();
          }, 1000);

        }else{
          swal('Canceled!', 'Changing password canceled!', 'error');
        }
      });

    return false;
});

$('.delete-main-slider').on('click',function(e) {

    var url = $(this).attr('href');

    e.preventDefault();

    swal({
      title: "Are you sure?",
      text: 'Are you sure that you want to delete this slider?',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {

          swal('Deleting!', 'Deleting slider on process.', 'success');

          setTimeout(function() {
               window.location.href = url;
          }, 1000);

        }else{
          swal('Canceled!', 'Deleting slider canceled!', 'error');
        }
      });

    return false;
});

$('.delete-videos').on('click',function(e) {

    var url = $(this).attr('href');

    e.preventDefault();

    swal({
      title: "Are you sure?",
      text: 'Are you sure that you want to delete this video?',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {

          swal('Deleting!', 'Deleting video on process.', 'success');

          setTimeout(function() {
               window.location.href = url;
          }, 1000);

        }else{
          swal('Canceled!', 'Deleting video canceled!', 'error');
        }
      });

    return false;
});

$('.update-featured-videos').on('click',function(e) {

    var url = $(this).attr('href');

    e.preventDefault();

    swal({
      title: "Featured this video?",
      text: 'Are you sure that you want to featured this video?',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {
          
          swal('Checking!', 'Updating on process, please wait...', 'success');
          
          setTimeout(function() {
               window.location.href = url;
          }, 1000);

        }else{
          swal('Canceled!', 'Updating canceled!', 'error');
        }
      });

    return false;
});

$('.trash-article').on('click',function(e) {

    var url = $(this).attr('href');

    e.preventDefault();

    swal({
      title: "Are you sure?",
      text: 'Are you sure that you want to move this article to trash?',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {

          swal('Moving!', 'Moving article.', 'success');

          setTimeout(function() {
               window.location.href = url;
          }, 1000);

        }else{
          swal('Canceled!', 'Moving article canceled!', 'error');
        }
      });

    return false;
});

$('.accept-article').on('click',function(e) {
    
    var url = $(this).attr('href');

    e.preventDefault();

    swal({
      title: "Accept article?",
      text: 'Are you sure that you want to accept this article?',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {

          swal('Processing', 'Accepting article on process.', 'success');

          setTimeout(function() {
              window.location.href = url;
          }, 1000);
          
        }else{
          swal('Canceled!', 'Accepting article canceled!', 'error');
        }
      });

    return false;
});

$('.reject-article').on('click',function(e) {
    
    var url = $(this).attr('href');

    e.preventDefault();

    swal({
      title: "Reject article?",
      text: 'Are you sure that you want to reject this article?',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#7fc35c",
      confirmButtonText: "Continue!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
      function (isConfirm) {
        if (isConfirm) {

          swal('Processing', 'Rejecting article on process.', 'success');

          setTimeout(function() {
              window.location.href = url;
          }, 1000);
          
        }else{
          swal('Canceled!', 'Rejecting article canceled!', 'error');
        }
      });

    return false;
});

})(jQuery);
