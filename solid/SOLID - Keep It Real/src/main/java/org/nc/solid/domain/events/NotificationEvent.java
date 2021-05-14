package org.nc.solid.domain.events;

import org.nc.solid.domain.entities.Post;
import org.nc.solid.domain.shared.DomainEvent;

public interface NotificationEvent extends DomainEvent<Post> {

}
