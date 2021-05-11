package nc.courses.solid.o.percentagesample.thirdapproach;

public class Progress {

    private Song song;
    private File file;

    public Double getLengthPercentage(Measurable measurable) {
        return measurable.getSentLengthPercentage();
    }
}
