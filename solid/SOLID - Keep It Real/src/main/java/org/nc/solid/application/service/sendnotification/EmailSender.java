package org.nc.solid.application.service.sendnotification;

import org.nc.solid.application.usecase.notification.interfaces.SenderEmail;
import org.nc.solid.domain.entities.Notification;

public class EmailSender implements SenderEmail {
    @Override
    public void send(Notification notification) {
        /*
         * Sending email notification
         */
    }
}
