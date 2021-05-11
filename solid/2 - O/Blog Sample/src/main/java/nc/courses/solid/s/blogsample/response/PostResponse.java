package nc.courses.solid.s.blogsample.response;

public class PostResponse {

    private String uuid;
    private String title;
    private String content;
    private String uuidUser;

    public String getUuidUser() {
        return uuidUser;
    }
    public void setUuidUser(String uuidUser) {
        this.uuidUser = uuidUser;
    }
    public String getUuid() {
        return uuid;
    }
    public void setUuid(String uuid) {
        this.uuid = uuid;
    }
    public String getTitle() {
        return title;
    }
    public void setTitle(String title) {
        this.title = title;
    }
    public String getContent() {
        return content;
    }
    public void setContent(String content) {
        this.content = content;
    }


}
