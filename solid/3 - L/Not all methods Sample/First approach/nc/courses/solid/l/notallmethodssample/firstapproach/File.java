package nc.courses.solid.l.notallmethodssample.firstapproach;

public interface File {
    public void rename(String name);
    public void changeOwner(String user, String group) throws Exception;
}
