package nc.courses.d.authenticationsample.thirdapproach;

public class Authentication {

    private final UserProviderInterface userProvider;

    public Authentication(UserProviderInterface userProvider)
    {
        this.userProvider = userProvider;
    }
    public void checkCredentials(String username, String password) throws Exception {

        String user = this.userProvider.findUser(username);

        if (user == null) {
            throw new Exception("User not found");
        }
        // validate password
    }

}
