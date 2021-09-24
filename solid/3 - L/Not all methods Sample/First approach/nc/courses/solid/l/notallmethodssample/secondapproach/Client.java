package nc.courses.solid.l.notallmethodssample.secondapproach;


public class Client {

    public void renamer(FileRenamer file, String name) throws Exception {
        file.rename(name);
    }

}
