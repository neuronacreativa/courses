package nc.courses.solid.l.notallmethodssample.firstapproach;

import org.junit.jupiter.api.Assertions;
import org.junit.jupiter.api.Test;

public class TestClient {

    @Test
    void testDropboxFileChangeOwner() throws Exception {
        Client client = new Client();

        Assertions.assertDoesNotThrow(
                () -> client.changeOwner(
                        new DropboxFile(), new String("Usuario"), new String("Grupo")
                )
        );
    }

}
