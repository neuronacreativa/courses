package org.nc.solid.domain.entities;

import javax.persistence.*;

@Entity
@Table(name = "NOTIFICATION")
public class Notification {

    @Id
    @Column(name = "UUID", unique = true, nullable = false)
    private String uuid;
    @Column(name = "RECEIVER")
    private String receiver;
    @Column(name = "BODY")
    private String body;
    @ManyToOne(fetch = FetchType.EAGER)
    @JoinColumn(name = "user_uuid", nullable = false)
    private User user;

    public String getUuid() {
        return uuid;
    }

    public void setUuid(String uuid) {
        this.uuid = uuid;
    }

    public String getReceiver() {
        return receiver;
    }

    public void setReceiver(String receiver) {
        this.receiver = receiver;
    }

    public String getBody() {
        return body;
    }

    public void setBody(String body) {
        this.body = body;
    }

    public User getUser() {
        return user;
    }

    public void setUser(User user) {
        this.user = user;
    }
}
