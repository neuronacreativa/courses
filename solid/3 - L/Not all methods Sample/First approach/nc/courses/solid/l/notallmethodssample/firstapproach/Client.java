package nc.courses.solid.l.notallmethodssample.firstapproach;

public class Client {

    public void changeOwner(File file, String user, String group) throws Exception {
        file.changeOwner(user, group);
    }

}
