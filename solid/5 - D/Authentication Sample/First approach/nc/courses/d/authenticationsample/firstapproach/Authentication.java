package nc.courses.d.authenticationsample.firstapproach;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.Statement;

public class Authentication {

    private Connection connection;

    public Authentication(Connection connection)
    {
        this.connection = connection;
    }

    public void checkCredentials(String username, String password) throws Exception {

        Statement statement = connection.createStatement();
        ResultSet resultSet = statement.executeQuery(
            "SELECT * FROM users WHERE username = " + username
        );

        if (!resultSet.first()) {
            throw new Exception("User not found");
        }
        // validate password
    }

}
