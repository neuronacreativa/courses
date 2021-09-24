package nc.courses.solid.l.notallmethodssample.secondapproach;

import org.junit.jupiter.api.Assertions;
import org.junit.jupiter.api.Test;

public class TestClient {

    @Test
    void testDropboxFileChangeOwner() throws Exception {
        Client client = new Client();

        FileRenamer dropboxFile = new DropboxFile();

        Assertions.assertDoesNotThrow(
                () -> dropboxFile.rename("Fichero")
        );
    }

}
