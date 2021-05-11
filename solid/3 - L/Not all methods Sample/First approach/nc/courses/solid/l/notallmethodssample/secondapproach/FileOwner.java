package nc.courses.solid.l.notallmethodssample.secondapproach;

public interface FileOwner extends File{
    public void changeOwner(String user, String group) throws Exception;
}
