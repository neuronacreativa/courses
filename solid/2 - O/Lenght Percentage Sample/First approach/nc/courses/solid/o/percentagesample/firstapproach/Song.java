package nc.courses.solid.o.percentagesample.firstapproach;

final class Song {
    private Double totalLength;
    private Double sentLength;

    public Double getSentLengthPercentage() {
        return sentLength * 100 / totalLength;
    }
}