package org.nc.posts.domain.events;

import org.nc.posts.domain.shared.DomainEvent;

/*
 * Our Domain Event
 */
public class PostCreated implements DomainEvent{

	/*
	 * Full qualified name as we described
	 */
    private static final String FULL_QUALIFIED_EVENT_NAME = "altran.blog.posts.event.1.posts.created";

    private final String postUuid;
    private final String userUuid;
    
    @Override
	public String fullQualifiedEventName() {
		return FULL_QUALIFIED_EVENT_NAME;
	}

	public PostCreated(String postUuid, String userUuid) {
		super();
		this.postUuid = postUuid;
		this.userUuid = userUuid;
	}

	public String getPostUuid() {
		return postUuid;
	}

	public String getUserUuid() {
		return userUuid;
	}

}
