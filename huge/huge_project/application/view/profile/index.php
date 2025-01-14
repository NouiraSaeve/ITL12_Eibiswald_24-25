<div class="container">
    <h1>ProfileController/index</h1>
    <div class="box">

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <h3>What happens here ?</h3>
        <div>
            This controller/action/view shows a list of all users in the system. You could use the underlying code to
            build things that use profile information of one or multiple/all users.
        </div>
        <div>
            <table class="overview-table">
                <thead>
                <tr>
                    <td>Id</td>
                    <td>Avatar</td>
                    <td>Username</td>
                    <td>User's email</td>
                    <td>Activated ?</td>
                    <td>Link to user's profile</td>
                </tr>
                </thead>
                <tbody id="user-table-body">
                </tbody>
            </table>

            
        </div>
    </div>
</div>
<footer>
    <!-- Script to show table with jquery instead of php-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script>
        $(document).ready(function() {
            var users = <?= json_encode($this->users); ?>;
            var $tableBody = $('#user-table-body');

            $.each(users, function(index, user) {
                var userRow = '<tr class="' + (user.user_active == 0 ? 'inactive' : 'active') + '">' +
                    '<td>' + user.user_id + '</td>' +
                    '<td class="avatar">' + (user.user_avatar_link ? '<img src="' + user.user_avatar_link + '" />' : '') + '</td>' +
                    '<td>' + user.user_name + '</td>' +
                    '<td>' + user.user_email + '</td>' +
                    '<td>' + (user.user_active == 0 ? 'No' : 'Yes') + '</td>' +
                    '<td><a href="<?= Config::get('URL') . 'profile/showProfile/'; ?>' + user.user_id + '">Profile</a></td>' +
                    '</tr>';
                $tableBody.append(userRow);
            });
        });
    </script>
</footer>
