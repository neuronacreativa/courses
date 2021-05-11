package nc.courses.d.authenticationsample.secondapproach;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.Statement;

public class UserProvider {

    private Connection connection;

    public UserProvider(Connection connection)
    {
        this.connection = connection;
    }

    public String findUser(String username) throws Exception {

        Statement statement = connection.createStatement();
        return statement.executeQuery(
                "SELECT * FROM users WHERE username = " + username
        ).getString("user");
    }

}
