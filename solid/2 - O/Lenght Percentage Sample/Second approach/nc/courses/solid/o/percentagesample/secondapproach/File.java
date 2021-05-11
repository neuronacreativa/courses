package nc.courses.solid.o.percentagesample.secondapproach;

final class File implements Measurable{
    private Double totalLength;
    private Double sentLength;

    @Override
    public Double getTotalLength() {
        return totalLength;
    }

    @Override
    public Double getSentLength() {
        return sentLength;
    }
}