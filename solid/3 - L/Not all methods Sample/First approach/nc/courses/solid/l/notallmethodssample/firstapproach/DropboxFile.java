package nc.courses.solid.l.notallmethodssample.firstapproach;

public class DropboxFile implements File{
    @Override
    public void rename(String name) {
        // Renaming things
    }

    @Override
    public void changeOwner(String user, String group) throws Exception {
        throw new Exception(
                "Not implemented for Dropbox files"
        );
    }
}
